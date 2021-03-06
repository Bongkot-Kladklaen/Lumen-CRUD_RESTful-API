# Products CRUD REST API
>This projects using [Lumen micro-framework by Laravel](https://lumen.laravel.com/) create web service and so JSON responses data

### Services

* Get products
* Create product
* Update product
* Delete product

## Response Codes
### Response Codes
```HTTP
200: Success
400: Bad request
401: Unauthorized
404: Cannot be found
405: Method not allowed
422: Unprocessable Entity 
50X: Server Error
```
### Error Codes Details
```HTTP
100: Bad Request
110: Unauthorized
120: User Authenticaion Invalid
130: Parameter Error
140: Item Missing
150: Conflict
160: Server Error
```

## Resource components
Major resource components supported by the Products CRUD API are:

These can be used like this

| resource      | description                       |
|:--------------|:----------------------------------|
| `/products` | returns a list of all products |
| `/productID/{id}` | returns product for the specified id |
| `/productInsert` | create a new product|
| `/productUpdate/{id}` | update product for the specified id |
| `/productDelete/{id}` |  delete product for the specified id |  

# REST API
The REST API to the example app is described below.

Full URLs service is running on https://products-crud-lumen.herokuapp.com

You can use [POSTMAN](https://www.postman.com/) to test the API, but the examples in this project use [cURL](https://curl.haxx.se/) to describe them.

## `GET` Show product all
### Request
`GET /api/v1/products`
```ZSH
curl --location --request GET 'https://products-crud-lumen.herokuapp.com/api/v1/products'
```
### Response
```JSON
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "product_category": null,
            "product_name": "Americano",
            "product_detail": "Americano",
            "unit_price": "60",
            "thumbnail": null
        },
        {
            "id": 11,
            "product_category": null,
            "product_name": "Espresso",
            "product_detail": "Expresso",
            "unit_price": "45",
            "thumbnail": null
        },
        {
            "id": 21,
            "product_category": null,
            "product_name": "cappuccino",
            "product_detail": "cappuccino",
            "unit_price": "50",
            "thumbnail": null
        }
    ]
}
```

## `GET` Show specified product
### Request
`GET /api/v1/productID/{id}`

`Parameters : {id}=[integer] the ID of the product on the server.`
```ZSH
curl --location --request GET 'https://products-crud-lumen.herokuapp.com/api/v1/productID/1'
```
### Response
```JSON
{
    "status": "success",
    "data": {
        "id": 1,
        "product_category": null,
        "product_name": "Latta",
        "product_detail": "Latta",
        "unit_price": "50",
        "thumbnail": null
    }
}
```

## `POST` Create a new product
### Request
`POST /api/v1/productInsert`

`Request Body :`

```JSON
{
    "product_category": "value=[Int]",
    "product_name": "value=[Int]",
    "product_detail": "value=[Int]",
    "unit_price": "value=[Int]",
    "thumbnail": "value=[Int]"
}
```
```ZSH
curl --location --request POST 'https://products-crud-lumen.herokuapp.com/api/v1/productInsert' \
--data-raw '{
    "product_category": null,
    "product_name": "Americano",
    "product_detail": "Americano",
    "unit_price": "60",
    "thumbnail": null
}'
```
### Response
```JSON
{
    "status": "success",
    "data": {
        "product_category": null,
        "product_name": "Americano",
        "product_detail": "Americano",
        "unit_price": "60",
        "thumbnail": null,
        "id": 31
    }
}
```
## `PUT` Update specified product
### Request
`PUT /api/v1/productUpdate/{id}`

`Parameters : {id}=[integer] the ID of the product on the server.`

`Request Body :`

```JSON
{
    "product_category": "value=[Int]",
    "product_name": "value=[Int]",
    "product_detail": "value=[Int]",
    "unit_price": "value=[Int]",
    "thumbnail": "value=[Int]"
}
```
```ZSH
curl --location --request PUT 'https://products-crud-lumen.herokuapp.com/api/v1/productUpdate/1' \
--data-raw '{
    "product_category": null,
    "product_name": "Americano",
    "product_detail": "Americano",
    "unit_price": "60",
    "thumbnail": null
}'
```
### Response
```JSON
{
    "status": "success",
    "data": {
        "id": 1,
        "product_category": null,
        "product_name": "Americano",
        "product_detail": "Americano",
        "unit_price": "60",
        "thumbnail": null
    }
}
```

## `DELETE` Delete specified product
### Request
`DELETE /api/v1/productDelete/{id}`

`Parameters : {id}=[integer] the ID of the product on the server.`
```ZSH
curl --location --request DELETE 'https://products-crud-lumen.herokuapp.com/api/v1/productDelete/41'
```
### Response
```JSON
{
    "status": "success",
    "data": {
        "deleteId": "41"
    }
}
```

## LICENSE
[MIT](LICENSE)

