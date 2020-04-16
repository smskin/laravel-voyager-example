<?php

use App\DBContext\PageReview;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class PageReviewsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'page_reviews');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'page_reviews',
                'display_name_singular' => __('seeders.data_types.page_review.singular'),
                'display_name_plural'   => __('seeders.data_types.page_review.plural'),
                'icon'                  => 'voyager-news',
                'model_name'            => 'App\\DBContext\\PageReview',
                'policy_name'           => null,
                'controller'            => 'App\\Voyager\\Http\\Controllers\\PageReviewController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $pageReviewDataType = DataType::where('slug', 'page_reviews')->firstOrFail();
        $dataRow = $this->dataRow($pageReviewDataType, 'id');
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

        $dataRow = $this->dataRow($pageReviewDataType, 'author_id');
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

        $dataRow = $this->dataRow($pageReviewDataType, 'page_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.page'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($pageReviewDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('seeders.data_rows.page_review'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($pageReviewDataType, 'body');
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

        $dataRow = $this->dataRow($pageReviewDataType, 'created_at');
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

        $dataRow = $this->dataRow($pageReviewDataType, 'updated_at');
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

        $dataRow = $this->dataRow($pageReviewDataType, 'page_review_belongsto_page_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.page'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model'       => 'App\\DBContext\\Page',
                    'table'       => 'pages',
                    'type'        => 'belongsTo',
                    'column'      => 'page_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'pages',
                    'pivot'       => 0,
                    'taggable'    => 0
                ],
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($pageReviewDataType, 'page_review_belongsto_page_review_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.parent_page_review'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model'       => 'App\\DBContext\\PageReview',
                    'table'       => 'page_reviews',
                    'type'        => 'belongsTo',
                    'column'      => 'parent_id',
                    'key'         => 'id',
                    'label'       => 'body',
                    'pivot_table' => 'page_reviews',
                    'pivot'       => 0,
                    'taggable'    => 0,
                    'depend_on_fields'=> '[{"field":"page_id","operator":"="}]'
                ],
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($pageReviewDataType, 'page_review_hasmany_page_review_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' =>__('seeders.data_rows.child_page_reviews'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'list_type'  => 'nested',
                    'model'       => 'App\\DBContext\\PageReview',
                    'table'       => 'page_reviews',
                    'type'        => 'hasMany',
                    'column'      => 'parent_id',
                    'key'         => 'id',
                    'label'       => 'body',
                    'pivot_table' => 'page_reviews',
                    'pivot'       => 0,
                    'taggable'    => 0
                ],
                'order'        => 10,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $rootMenuItem = MenuItem::where('menu_id', $menu->id)
            ->where('title',__('seeders.menu_items.page_root'))
            ->whereNull('parent_id')
            ->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.page_reviews'),
            'url'     => '',
            'route'   => 'voyager.page_reviews.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-edit',
                'color'      => null,
                'parent_id'  => $rootMenuItem->id,
                'order'      => 2,
            ])->save();
        }

        //Permissions
        Permission::generateFor('page_reviews');

        //Content
        $pageReview = $this->findPageReview(1);
        if (!$pageReview->exists) {
            $pageReview->fill([
                'author_id'=>1,
                'page_id'=>1,
                'parent_id'=>null,
                'body'=>'Page review 1 body'
            ])->save();
        }

        $pageReview = $this->findPageReview(2);
        if (!$pageReview->exists) {
            $pageReview->fill([
                'author_id'=>1,
                'page_id'=>1,
                'parent_id'=>1,
                'body'=>'Page review 2 body'
            ])->save();
        }
    }

    /**
     * [page review description].
     *
     * @param [type] $id [description]
     *
     * @return [type] [description]
     */
    protected function findPageReview(int $id)
    {
        return PageReview::firstOrNew(['id'=>$id]);
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
