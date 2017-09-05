<script>
    var VARS = {
        url: {
            users: {
                login: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'login' ]) ?>"
            },
            pages: {
                setup: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'setup' ]) ?>"
            }

        }/*,
        models: {
            reservations: {
                status: {
                    PENDING: "",
                    DENIED: "",
                    APPROVED: "",
                }
            }
        }*/
    }
</script>