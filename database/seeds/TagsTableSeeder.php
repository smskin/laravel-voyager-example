<?php

use App\DBContext\Tag;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class TagsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'tags');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tags',
                'display_name_singular' => __('seeders.data_types.tag.singular'),
                'display_name_plural'   => __('seeders.data_types.tag.plural'),
                'icon'                  => 'voyager-news',
                'model_name'            => 'App\\DBContext\\Tag',
                'policy_name'           => null,
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        //Data Rows
        $tagDataType = DataType::where('slug', 'tags')->firstOrFail();
        $dataRow = $this->dataRow($tagDataType, 'id');
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

        $dataRow = $this->dataRow($tagDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($tagDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin'      => 'name',
                        'forceUpdate' => true,
                    ],
                    'validation' => [
                        'rule'  => 'unique:tags,slug',
                    ],
                ],
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($tagDataType, 'created_at');
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
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($tagDataType, 'updated_at');
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
                'order'        => 5,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('seeders.menu_items.tags'),
            'url'     => '',
            'route'   => 'voyager.tags.index',
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
        Permission::generateFor('tags');

        //Content
        $tag = $this->findTag('tag-1');
        if (!$tag->exists) {
            $tag->fill([
                'name'            => 'Tag 1',
                'slug'            => 'tag-1'
            ])->save();
        }

        $tag = $this->findTag('tag-2');
        if (!$tag->exists) {
            $tag->fill([
                'name'            => 'Tag 2',
                'slug'            => 'tag-2'
            ])->save();
        }
    }

    /**
     * [tag description].
     *
     * @param [type] $slug [description]
     *
     * @return [type] [description]
     */
    protected function findTag($slug)
    {
        return Tag::firstOrNew(['slug' => $slug]);
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
