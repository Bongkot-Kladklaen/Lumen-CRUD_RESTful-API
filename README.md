# Products CRUD REST API
>This projects using [Lumen micro-framework by Laravel](https://lumen.laravel.com/) create web service and so JSON responses data

Where full URLs are provided in responses they will be rendered as if service is running on https://products-crud-lumen.herokuapp.com


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

- products
- productID
- productInsert
- productUpdate
- productDelete

These can be used like this

| resource      | description                       |
|:--------------|:----------------------------------|
| `/products` | returns a list of all products |
| `/productID/{id}` | returns product for the specified id |
| `/productInsert` | create a new product |
| `/productUpdate/{id}` | update product for the specified id |
| `/productDelete/{id}` |  delete product for the specified id |  

# REST API
The REST API to the example app is described below.

## Show product all
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

## Show specified product
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