<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['id'=>'03547d69-de22-4781-b728-e0823fcdb5f3', 'name'=>'Юрлинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'0810dccb-7114-4d33-9454-50b00433eb1b', 'name'=>'Бардымский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'0e9750c7-9f8c-4e23-b996-9a7bff46bb2c', 'name'=>'Частинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'189875b0-b84b-4980-a125-5a0581f5197e', 'name'=>'Куединский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'1f81a925-75ee-4fa2-87b1-9de26a2813ed', 'name'=>'Кунгурский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'1ffa3973-279c-4bcd-a9fc-ece8c7d1039e', 'name'=>'Краснокамский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'2ddaf37d-e4ea-4748-b6b8-943854f37a0f', 'name'=>'Октябрьский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'2e82fea7-7e6f-4c8a-849f-57140f80c7f3', 'name'=>'Очерский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'3afa40f2-8169-4006-a5c4-33ace0510d7f', 'name'=>'Еловский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'44166947-11b9-4a1b-a1bf-6e9cba64299d', 'name'=>'Карагайский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'4f092f1f-8ebf-4ea4-8f01-a75cbcf1d43f', 'name'=>'Чердынский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14', 'name'=>'Пермский', 'short_name'=>'край', 'level'=>'1', 'parent_id'=>''],
            ['id'=>'57e3f364-d709-44a4-a81f-c9ea68778fd0', 'name'=>'Березовский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'5ca82a07-403e-48aa-8fa8-a00277123e46', 'name'=>'Ординский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'60dd742a-3dc9-4ab1-9a22-12c19efdb340', 'name'=>'Осинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'6e850977-64c1-49ac-a405-8ff2d77fa219', 'name'=>'Косинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'6fe17476-90db-4bbf-af4f-e33564751f95', 'name'=>'Кудымкарский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'75550fdb-56e3-44d5-a4c4-75ab2cb53e83', 'name'=>'Чернушинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'76561b13-cc96-478c-9266-bc69ec254776', 'name'=>'Большесосновский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'7dd380b3-ce33-4280-934f-a4265a07803b', 'name'=>'Пермский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'7f21b9b5-1f39-44ad-8ce4-6e186e8389ce', 'name'=>'Усольский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'9460a26c-a2b9-4cb2-9e0e-ddc9022b0ecb', 'name'=>'Суксунский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'9eea0415-ab1c-4b49-bd9d-aa04ea23d4e9', 'name'=>'Сивинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'a266fff5-5817-4d3b-95dd-c447144f02d1', 'name'=>'Уинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'a4b9d248-dec4-4686-b4bc-d3b0d8fd9be6', 'name'=>'Кочевский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'a80bf180-06e3-4b38-971c-ecef8b417337', 'name'=>'Ильинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'b6c85a2d-c0ec-4030-a306-4ca7bdcd25f4', 'name'=>'Горнозаводский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'c3700ef0-0a85-4032-947c-009f956fd754', 'name'=>'Верещагинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'c787b918-d201-408b-abb9-84d53befc6a5', 'name'=>'Кишертский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'d336561f-cc98-4742-9f7b-52d99c78463e', 'name'=>'Гайнский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'db4332aa-5444-4c77-a364-541563e0bb1d', 'name'=>'Соликамский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'e4172d66-d08e-4eda-a274-c47119c30470', 'name'=>'Красновишерский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'e7012a7a-e7de-4306-8f52-aabeaf82f178', 'name'=>'Оханский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'f8523e08-3e73-4ba1-b1a2-4bdaf1e8b82f', 'name'=>'Юсьвинский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'fa41d32f-22b5-4436-bddd-c2ec035377c6', 'name'=>'Нытвенский', 'short_name'=>'р-н', 'level'=>'3', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'cc8b9eb5-bd4e-4472-8314-f889e8a6679c', 'name'=>'Кизел', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'5d7c95a5-a4d7-4fb4-9774-93e527636a9e', 'name'=>'Лысьва', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'a309e4ce-2f36-4106-b1ca-53e0f48a6d95', 'name'=>'Пермь', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'d36590ad-0286-44a2-876d-7732deee4234', 'name'=>'Кудымкар', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'230c2f4d-fd9d-46fc-8bbd-b8de26810790', 'name'=>'Добрянка', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'1dc365d3-60b1-41ea-a3b3-1c599024cf30', 'name'=>'Губаха', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'784b1911-182d-476b-a4ad-0f3fa1ef7777', 'name'=>'Чусовой', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'4ffcde97-05e9-4a6e-bd51-3a984b41b7bd', 'name'=>'Березники', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'4f07ade1-1415-44c8-bed9-e851f1ef558d', 'name'=>'Александровск', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'edeaf203-1bc3-4fe1-b3ed-15eb89978783', 'name'=>'Гремячинск', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'06d7a6d6-8f57-4e5a-b698-2bc44c92bb84', 'name'=>'Чайковский', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'8b698775-fe5e-4fc0-9f0d-272855d82d15', 'name'=>'Соликамск', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14'],
            ['id'=>'73e5113d-949a-4a9e-8e44-6eae9ef93747', 'name'=>'Кунгур', 'short_name'=>'г', 'level' => '4', 'parent_id'=>'4f8b1a21-e4bb-422f-9087-d3cbf4bebc14']
        ]);
    }
}
