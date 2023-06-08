<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
use App\Http\Services\ObjectService;
use Illuminate\Support\Facades\Log;
 
class SyncScheduleTtsToGoogle extends Command
{
    // 命令名稱
    protected $signature = 'syncSchedule:TtsToGoogle';
 
    // 說明文字
    protected $description = '[同步行程] 由新後台建立的總部/店行程，同步到業務的Google行事曆';

    public $ObjectService;
 
    public function __construct(ObjectService $ObjectService)
    {
        parent::__construct();
        $this->ObjectService = $ObjectService;
    }
 
    // Console 執行的程式
    public function handle()
    {
        $d = $this->ObjectService->objectList(123);
        Log::info($d);
    }
}