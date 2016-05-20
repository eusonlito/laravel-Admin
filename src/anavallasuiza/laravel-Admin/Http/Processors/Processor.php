<?php
namespace Admin\Http\Processors;

use Eusonlito\LaravelProcessor\Processors\ProcessorTrait;
use Admin\Library;
use Auth;
use Session;

abstract class Processor
{
    use ProcessorTrait, ExportCsvTrait;

    protected $user;
    protected $locale;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->locale = Library\Helpers::locale();
    }
}
