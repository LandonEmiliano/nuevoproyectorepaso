<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductRedirectTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_redirects_to_the_relative_product_list_url(): void
    {
        $response = $this->post('/products', [
            'name' => 'Test product',
            'descripcion' => 'Test description',
            'precio' => 10,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Test product']);
    }

    public function test_destroy_redirects_to_the_relative_product_list_url(): void
    {
        $product = Product::create([
            'name' => 'Test product',
            'descripcion' => 'Test description',
            'precio' => 10,
        ]);

        $response = $this->delete("/products/{$product->id}");

        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
