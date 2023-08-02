<?php

namespace App\Jobs;

use App\Imports\ExcelImport;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class ProcessExcelDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $sourcing;
    private $path;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sourcing, $path)
    {
        $this->sourcing = $sourcing;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $import = new ExcelImport($this->sourcing);
            Excel::import($import, $this->path);
        } catch (Exception $content_error) {
            // Handle the exception here if needed
            // You can log the error or perform any other action
        }
    }
}
