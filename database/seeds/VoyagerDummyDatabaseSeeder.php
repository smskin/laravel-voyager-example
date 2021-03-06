<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedersPath = database_path('seeds').'/';
        $this->seed('CategoriesTableSeeder');
        $this->seed('UsersTableSeeder');
        $this->seed('TagsTableSeeder');
        $this->seed('PostsTableSeeder');
        $this->seed('PostReviewsTableSeeder');
        $this->seed('PagesTableSeeder');
        $this->seed('PageReviewsTableSeeder');
        $this->seed('PollsTableSeeder');
        $this->seed('PollQuestionsTableSeeder');
        $this->seed('PollQuestionAnswersTableSeeder');
        $this->seed('TranslationsTableSeeder');
        $this->seed('PermissionRoleTableSeeder');
    }
}
