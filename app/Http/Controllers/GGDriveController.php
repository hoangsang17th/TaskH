<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class GGDriveController extends Controller
{
    public function index(){
        $googleDriveStorage = Storage::disk('google');
    
        // Đường dẫn tới thư mục muốn liệt kê nội dung
        $dir = '/';
        // Hoặc có thể liệt kê trong một sub-folders
        // $dir = '/path-to-sub-folder'
        
        // Có đọc nội dung bên trong các sub-folder của $dir hay không?
        // Nên đặt là false để tránh phải liệt kê qua nhiều khi thư mục có nhiều file & sub-folders
        $recursive = false;
        
        $contents = collect($googleDriveStorage->listContents($dir, $recursive));
        
        dd($contents);
    }
    
}
