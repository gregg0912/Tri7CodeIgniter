    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on("click", ".confirm-delete", function(e)
            {
                e.preventDefault();
                let name = $(this).attr("data-name");
                let confirmDialog = confirm("Are you sure you want to delete "+name+"?");
                if (confirmDialog)
                {
                    let id = $(this).val();
                    $.ajax({
                        type: "DELETE",
                        url: "/user/delete/"+id,
                        success: function(response) {
                            alert(name+" has been removed successfully.");
                            window.location.reload();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>