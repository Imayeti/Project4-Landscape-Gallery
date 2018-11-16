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
        $exhibit1->exhibit_name = 'trees';
        $exhibit1->year = '2018';
        $exhibit1->artist = 'Joe Bob';
        $exhibit1->url = "https://3c1703fe8d.site.internapcdn.net/newman/csz/news/800/2018/europeslostf.jpg";
        $exhibit1->description = 'lots of trees';
        $exhibit1->save();

        $exhibit2 = new \App\landscape;
        $exhibit2->exhibit_name = 'mountains';
        $exhibit2->year = '2016';
        $exhibit2->artist = 'Rachel Johnson';
        $exhibit2->url = "https://cdn.cnn.com/cnnnext/dam/assets/170407220916-04-iconic-mountains-matterhorn-restricted.jpg";
        $exhibit2->description = 'lots of trees';
        $exhibit2->save();
    }
}
