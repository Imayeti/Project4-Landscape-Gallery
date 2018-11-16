<?php

use Illuminate\Database\Seeder;

class LandscapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibit1 = new \App\landscape;
        $exhibit1->exhibit_name = 'Forest';
        $exhibit1->year = '2018';
        $exhibit1->artist = 'Joe Mcfarland';
        $exhibit1->url = "https://3c1703fe8d.site.internapcdn.net/newman/csz/news/800/2018/europeslostf.jpg";
        $exhibit1->description = 'Wooded area with mossy floor and pine trees';
        $exhibit1->save();

        $exhibit2 = new \App\landscape;
        $exhibit2->exhibit_name = 'mountains';
        $exhibit2->year = '2016';
        $exhibit2->artist = 'Rachel Johnson';
        $exhibit2->url = "https://cdn.cnn.com/cnnnext/dam/assets/170407220916-04-iconic-mountains-matterhorn-restricted.jpg";
        $exhibit2->description = 'lots of trees';
        $exhibit2->save();

        $exhibit3 = new \App\landscape;
        $exhibit3->exhibit_name = 'Canyon';
        $exhibit3->year = '2000';
        $exhibit3->artist = 'John Doe';
        $exhibit3->url = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Yosemite_Valley_from_Wawona_Tunnel_view%2C_vista_point..JPG/1024px-Yosemite_Valley_from_Wawona_Tunnel_view%2C_vista_point..JPG";
        $exhibit3->description = 'Massive canyon in Yosemite Park';
        $exhibit3->save();

        $exhibit4 = new \App\landscape;
        $exhibit4->exhibit_name = 'The North';
        $exhibit4->year = '2002';
        $exhibit4->artist = 'Brad Smith';
        $exhibit4->url = "https://static.photocdn.pt/images/articles/2017/04/28/iStock-546424192.jpg";
        $exhibit4->description = 'Pine trees overlooking beautiful lake up north';
        $exhibit4->save();

        $exhibit5 = new \App\landscape;
        $exhibit5->exhibit_name = 'Meadow';
        $exhibit5->year = '1999';
        $exhibit5->artist = 'Rachel Johnson';
        $exhibit5->url = "https://static.photocdn.pt/images/articles/2017/04/28/iStock-517188688.jpg";
        $exhibit5->description = 'A Meadow with grass swaying in the wind at sunset';
        $exhibit5->save();


    }
}
