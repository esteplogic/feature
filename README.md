
## API Endpoints

### Database File :- https://github.com/esteplogic/feature/raw/test-task/pl-cakephp-test.sql 

### http://test-task.local/api/contacts/index
### Request Type :- GET
### page=2
### offset = 2
### limit = 5

```
[
    {
        "id": 6,
        "first_name": "Stoddard",
        "last_name": "Boas",
        "phone_number": "3498461673"
    },
    {
        "id": 7,
        "first_name": "Ethelyn",
        "last_name": "Crohan",
        "phone_number": "6167370200"
    },
    {
        "id": 8,
        "first_name": "Heddi",
        "last_name": "Gerault",
        "phone_number": "6541083916"
    },
    {
        "id": 9,
        "first_name": "Kay",
        "last_name": "Decker",
        "phone_number": "1594760245"
    },
    {
        "id": 10,
        "first_name": "Gerri",
        "last_name": "Gaddas",
        "phone_number": "6413457727"
    }
]
```


### http://test-task.local/api/contacts/index_ext
### Request Type :- GET
#### page = 2
#### offset = 2
#### limit = 5
```
[
    {
        "id": 1,
        "first_name": "Leeland",
        "last_name": "Josipovitz",
        "phone_number": "5741394097",
        "company": {
            "id": 31,
            "company_name": "Rhynoodle",
            "phone_number": "3473025441"
        }
    },
    {
        "id": 2,
        "first_name": "Nanci",
        "last_name": "Paolicchi",
        "phone_number": "2071533275",
        "company": {
            "id": 7,
            "company_name": "Tekfly",
            "phone_number": "4732404862"
        }
    },
    {
        "id": 3,
        "first_name": "Cherise",
        "last_name": "Pavlata",
        "phone_number": "9911766720",
        "company": {
            "id": 41,
            "company_name": "Gabvine",
            "phone_number": "6604107009"
        }
    },
    {
        "id": 4,
        "first_name": "Olenka",
        "last_name": "Prestner",
        "phone_number": "4196632794",
        "company": {
            "id": 60,
            "company_name": "Thoughtstorm",
            "phone_number": "4944454502"
        }
    },
    {
        "id": 5,
        "first_name": "Dalli",
        "last_name": "Outridge",
        "phone_number": "7976346999",
        "company": {
            "id": 49,
            "company_name": "Jazzy",
            "phone_number": "6221971574"
        }
    }
]
```


### http://test-task.local/api/contacts
## Request Type :- POST
## header 
#### Content-Type:application/json
####  Accept:application/json

```
{
    "status": "success",
    "message": "Contacts successfully created"
}
```

```
{
    "status": "failed",
    "message": "Failed to save data"
}
```


```
{ 
	"first_name":"Leeland",
	"last_name":"Josipovitz",
	"phone_number":"5741394097",
	"address":"98 Claremont Point",
	"company_id":"31",
	"notes":"Salvadora hexalepis",
	"add_notes":"Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.",
	"internal_notes":"Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.",
	"comments":"Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum"
}
```
