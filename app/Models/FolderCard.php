<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderCard extends Model
{
    use HasFactory;

    // 使用的資料表並非 convention 的 folder_cards，所以需要只定使用茲料表名稱
    protected $table = 'folder_card';


}
