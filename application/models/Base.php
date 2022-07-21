<?php

namespace application\models;

use application\core\Model;

class Base extends Model
{
    public function getAllGame()
    {
        return $this->db->row(
            "select distinct gn.game_name, group_concat(gg.genre) as genre, gd.developer_name from games_full_info gfi 
                join games_name gn on gfi.game_name = gn.id 
                join games_genre gg on gfi.genre = gg.id 
                join games_developer gd on gfi.developer_name = gd.id 
                group by gfi.game_name, gfi.developer_name"
        );
    }
}