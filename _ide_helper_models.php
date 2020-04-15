<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\DBContext{
/**
 * App\DBContext\Page
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string|null $excerpt
 * @property string|null $body
 * @property string|null $image
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page active()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslations($locales = null, $fallback = true)
 */
	class Page extends \Eloquent {}
}

namespace App\DBContext{
/**
 * App\DBContext\Post
 *
 * @property int $id
 * @property int $author_id
 * @property int|null $category_id
 * @property string $title
 * @property string|null $seo_title
 * @property string|null $excerpt
 * @property string $body
 * @property string|null $image
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property int $featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \TCG\Voyager\Models\User $authorId
 * @property-read \TCG\Voyager\Models\Category|null $category
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\Post withTranslations($locales = null, $fallback = true)
 */
	class Post extends \Eloquent {}
}

namespace App\DBContext{
/**
 * App\DBContext\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $locale
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \TCG\Voyager\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DBContext\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Category
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $order
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read null $translated
 * @property-read \TCG\Voyager\Models\Category $parentId
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category withTranslations($locales = null, $fallback = true)
 */
	class Category extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\DataRow
 *
 * @property int $id
 * @property int $data_type_id
 * @property string $field
 * @property string $type
 * @property string $display_name
 * @property int $required
 * @property int $browse
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property int $delete
 * @property string|null $details
 * @property int $order
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereDataTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow withTranslations($locales = null, $fallback = true)
 */
	class DataRow extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\DataType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $display_name_singular
 * @property string $display_name_plural
 * @property string|null $icon
 * @property string|null $model_name
 * @property string|null $policy_name
 * @property string|null $controller
 * @property string|null $description
 * @property int $generate_permissions
 * @property int $server_side
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $default_search_key
 * @property mixed $order_column
 * @property mixed $order_direction
 * @property mixed $order_display_column
 * @property mixed $scope
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\DataRow[] $rows
 * @property-read int|null $rows_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereDisplayNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereDisplayNameSingular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereGeneratePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType wherePolicyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereServerSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType withTranslations($locales = null, $fallback = true)
 */
	class DataType extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Menu
 *
 * @todo : Refactor this class by using something like MenuBuilder Helper.
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $parent_items
 * @property-read int|null $parent_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\MenuItem
 *
 * @property int $id
 * @property int|null $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string|null $icon_class
 * @property string|null $color
 * @property int|null $parent_id
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $route
 * @property string|null $parameters
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $children
 * @property-read int|null $children_count
 * @property-read null $translated
 * @property-read \TCG\Voyager\Models\Menu|null $menu
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem withTranslations($locales = null, $fallback = true)
 */
	class MenuItem extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Page
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string|null $excerpt
 * @property string|null $body
 * @property string|null $image
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page active()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslations($locales = null, $fallback = true)
 */
	class Page extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Permission
 *
 * @property int $id
 * @property string $key
 * @property string|null $table_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Post
 *
 * @property int $id
 * @property int $author_id
 * @property int|null $category_id
 * @property string $title
 * @property string|null $seo_title
 * @property string|null $excerpt
 * @property string $body
 * @property string|null $image
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property int $featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \TCG\Voyager\Models\User $authorId
 * @property-read \TCG\Voyager\Models\Category|null $category
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslations($locales = null, $fallback = true)
 */
	class Post extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string $display_name
 * @property string|null $value
 * @property string|null $details
 * @property string $type
 * @property int $order
 * @property string|null $group
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\Translation
 *
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereForeignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Translation whereValue($value)
 */
	class Translation extends \Eloquent {}
}

namespace TCG\Voyager\Models{
/**
 * TCG\Voyager\Models\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $locale
 * @property-read \TCG\Voyager\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

