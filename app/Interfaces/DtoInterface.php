<?php


namespace App\Interfaces;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface Dtointerface
{
    /// Define the methods that your DTOs should implement
    public static function fromAPiFormRequest(FormRequest $request): self;
    public static function fromModel(Model $model): self;
    public static function toArray(Model $model): array;
}
