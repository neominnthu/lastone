<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'customer_id' => 'required|uuid|exists:users,id',
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ];
    }
}
