<?php declare(strict_types=1);

namespace Tests\Fakes;

use Dive\EloquentSuper\InheritsFromSuper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin SuperModel
 */
class SoftModel extends Model
{
    use InheritsFromSuper;
    use SoftDeletes;

    protected $guarded = [];

    protected $table = 'test_models_soft';

    protected function getSuperClass(): string
    {
        return SuperModel::class;
    }
}
