<!-- showAll 
show
showResources
showResource
create 
update
delete -->

<?php
    class ApiController extends ControladorBase {

        public function showAll() {
           // echo 'function showAll';

            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://reqres.in/api/users?page=2');
    
            $var = json_decode($res->getBody()->getContents(),true);

            $this->view("guzzleShowAll",array('response'=>$var));

        }

        public function show() {

            echo 'function show';

            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://reqres.in/api/users/2');
            var_dump($res);

            $this->view("test",array());

        }

        public function showResources() {

            echo 'function show resources';

            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://reqres.in/api/unknown');
            var_dump($res);

            $this->view("test",array());

        }

        public function showResource() {

            echo 'function show resource';

            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://reqres.in/api/unknown/2');
            var_dump($res);

            $this->view("test",array());

        }

        public function create() {

            echo 'function create';

            $client = new GuzzleHttp\Client();
            $res = $client->request('POST', 'https://reqres.in/api/unknown/2');
            var_dump($res);

            $this->view("test",array());

        }

        public function update() {

            echo 'function update';

            $client = new GuzzleHttp\Client();
            $res = $client->request('PUT', 'https://reqres.in/api/users/2');
            var_dump($res);

            $this->view("test",array());

        }

        public function delete() {
            echo 'function delete';

            $client = new GuzzleHttp\Client();
            $res = $client->request('DELETE', 'https://reqres.in/api/users/2');
            var_dump($res);

            $this->view("test",array());
        }
    }

?>

