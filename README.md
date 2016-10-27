# TodoMove\Intercessor\Service\ServiceName Package Base
Base service repo to copy package.json, and Reader/Writer classes for new services (Todoist, Toodledo, Any.do, RTM)

* Readers should extend: `TodoMove\Intercessor\Service\AbstractReader`
* Writers should extend: `TodoMove\Intercessor\Service\AbstractWriter`

# How to use

* Fork, rename, replace 'ServiceName' with your actual service's name (`README.md`, composer.json`, `Reader.php`, `Writer.php`)
* Add logic, `git tag` then push

# Examples
* To write your own `Reader` you're best reading through the code of our [OmniFocus reader](https://github.com/TodoMove/omnifocus)
* To write your own `Writer` you're best reading through the code of our [Wunderlist writer](https://github.com/TodoMove/service-wunderlist)

# Notes

All items use the `Metable` trait so can store any meta data needed for reference later on.  If you're syncing a folder to Wunderlist, and it returns its own folderid you can store that in the metadata (`$folder->meta('wunderlist-id', $id);`) for retrieval later on when you need to put projects in that folder