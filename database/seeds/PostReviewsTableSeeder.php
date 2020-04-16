<?php

use App\DBContext\PostReview;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class PostReviewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'post_reviews');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'post_reviews',
                'display_name_singular' => __('seeders.data_types.post_review.singular'),
                'display_name_plural'   => __('seeders.data_types.post_review.plural'),
                'icon'                  => 'voyager-news',
                'model_name'            => 'App\\DBContext\\PostReview',
                'policy_name'           => null,
                'controller'            => 'App\\Voyager\\Http\\Controllers\\PostReviewController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $postReviewDataType = DataType::where('slug', 'post_reviews')->firstOrFail();
        $dataRow = $this->dataRow($postReviewDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.author'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'post_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.post'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.post_review'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => __('voyager::seeders.data_rows.body'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'post_review_belongsto_post_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.post'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model'       => 'App\\DBContext\\Post',
                    'table'       => 'posts',
                    'type'        => 'belongsTo',
                    'column'      => 'post_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'posts',
                    'pivot'       => 0,
                    'taggable'    => 0
                ],
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'post_review_belongsto_post_review_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.parent_post_review'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model'       => 'App\\DBContext\\PostReview',
                    'table'       => 'post_reviews',
                    'type'        => 'belongsTo',
                    'column'      => 'parent_id',
                    'key'         => 'id',
                    'label'       => 'body',
                    'pivot_table' => 'post_reviews',
                    'pivot'       => 0,
                    'taggable'    => 0,
                    'depend_on_fields'=> '[{"field":"post_id","operator":"="}]'
                ],
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($postReviewDataType, 'post_review_hasmany_post_review_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.child_post_reviews'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'list_type'  => 'nested',
                    'model'       => 'App\\DBContext\\PostReview',
                    'table'       => 'post_reviews',
                    'type'        => 'hasMany',
                    'column'      => 'parent_id',
                    'key'         => 'id',
                    'label'       => 'body',
                    'pivot_table' => 'post_reviews',
                    'pivot'       => 0,
                    'taggable'    => 0
                ],
                'order'        => 10,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.post_reviews'),
            'url'     => '',
            'route'   => 'voyager.post_reviews.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-news',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 6,
            ])->save();
        }

        //Permissions
        Permission::generateFor('post_reviews');

        //Content
        $postReview = $this->findPostReview(1);
        if (!$postReview->exists) {
            $postReview->fill([
                'author_id'=>1,
                'post_id'=>1,
                'parent_id'=>null,
                'body'=>'Post review 1 body'
            ])->save();
        }

        $postReview = $this->findPostReview(2);
        if (!$postReview->exists) {
            $postReview->fill([
                'author_id'=>1,
                'post_id'=>1,
                'parent_id'=>1,
                'body'=>'Post review 2 body'
            ])->save();
        }
    }

    /**
     * [post review description].
     *
     * @param [type] $id [description]
     *
     * @return [type] [description]
     */
    protected function findPostReview(int $id)
    {
        return PostReview::firstOrNew(['id'=>$id]);
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
