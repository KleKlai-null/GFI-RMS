<?php 

namespace App\Http\Livewire\Form\Trait;

use App\Services\DocumentService;
use Carbon\Carbon;

trait Generic
{
    public $total, $total_today, $open, $open_day, $close, $close_today, $archive, $archive_today;
    public $statistics;
    public $status = 'Open';
    
    public function getListeners()
    {
        return $this->listeners + [
            'recordDelete'  => 'get_statistic',
            'recordArchive' => 'get_statistic'
        ];
    }
 
    public function search($model)
    {
        if(auth()->user()->hasRole('administrator'))
        {
            return $model::search('document_series_no', '%'.$this->search.'%')->where('status', $this->status)->orderBy('id', 'desc')->paginate(5);
        }

        return $model::search('document_series_no', '%'.$this->search.'%')->where('status', $this->status)->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->paginate(5);
    }

    // All Withdrawal method use this function
    public function get_statistic() 
    {
        $this->total                      = $this->model::count();
        $this->total_today                = $this->model::whereDate('created_at', Carbon::today())->count();
        $this->open_today                 = $this->model::where('status', 'Open')->whereDate('created_at', Carbon::today())->count();
        $this->open                       = $this->model::where('status', 'Open')->count();
        $this->open_today                 = $this->model::where('status', 'Open')->whereDate('created_at', Carbon::today())->count();
        $this->close                      = $this->model::where('status', 'Closed')->count();
        $this->close_today                = $this->model::where('status', 'Closed')->whereDate('created_at', Carbon::today())->count();
        $this->archive                    = $this->model::where('status', 'Archived')->count();
        $this->archive_today              = $this->model::where('status', 'Archived')->whereDate('created_at', Carbon::today())->count();

        $this->statistics = [
            'total'         => $this->total,
            'total_today'   => $this->total_today,
            'open'          => $this->open,
            'open_today'    => $this->open_today,
            'close'         => $this->close,
            'close_today'   => $this->close_today,
            'archive'       => $this->archive,
            'archive_today' => $this->archive_today
        ];
    }

    public function status($status)
    {
        $this->status = $status;
    }

    /**Shared by Index and Show */
    public function archive($id)
    {
        $model = $this->model::find($id);
        $model->archive();
        
        $this->emit('recordArchive');
    }

    public function delete($id)
    {
        $model = $this->model::find($id)->delete();

        $this->emit('recordDelete');
    }
}