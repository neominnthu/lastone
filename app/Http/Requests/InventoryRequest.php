<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'location' => 'nullable|string',
        ];
    }
}
