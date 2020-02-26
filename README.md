# Laravel Custom Filesystem for IBM Cloud Object Storage

This is an [IBM Cloud Object Storage](https://www.ibm.com/cloud/object-storage) Custom Filesystem for [Laravel](http://laravel.com/).

## Installation

* Install the package with Composer
```bash
composer require tavux/laravel-ibm-cos
```
* Add  `\Tavux\IBMCloudObjectStorage\Laravel\IbmCloudObjectStorageProvider::class` to `providers` in *config/app.php*

* In your *.env* file, add these lines with your IBM Cloud storage parameters 
```dotenv
IBM_COS_ACCESS_KEY_ID=<access_key>
IBM_COS_SECRET_ACCESS_KEY=<secret_access_key>
IBM_COS_DEFAULT_REGION=<region>
IBM_COS_BUCKET=<bucket>
IBM_COS_ENDPOINT=<endpoint>
```

## Usage

This is an example of usage :

```php
use Illuminate\Support\Facades\Storage;

Storage::disk('ibm-cos')->allFiles('/');
```

To know all the available methods, please have a look to the [Laravel File Storage documentation](https://laravel.com/docs/6.x/filesystem).




