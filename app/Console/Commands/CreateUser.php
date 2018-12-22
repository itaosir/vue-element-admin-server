<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Hash;
use Illuminate\Console\Command;
use SuperHappysir\Support\Constant\Enum\StateEnum;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'admin:create';
    
    /**
     * The console command description.
     * @var string
     */
    protected $description = '创建一个管理员用户';
    
    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle()
    {
        $account     = $this->ask('What is your account?');
        $nickname     = $this->ask('What is your nickname?');
        $mobile    = $this->ask('What is your mobile?');
        $password = $this->secret('What is your password?');
        
        Admin::create([
            'account'  => $account,
            'nickname' => $nickname,
            'mobile'   => $mobile,
            'state'    => StateEnum::ENABLED,
            'password' => Hash::make($password),
        ]);
        
        $this->info('The administrator was created successfully');
    }
}
