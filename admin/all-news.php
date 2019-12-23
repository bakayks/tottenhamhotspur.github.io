<?php
include 'html-header.php';
include '../db/db.php';
$db = new db();
$connect = $db->conn;
$query = "SELECT * FROM news";
$result = $connect->query($query);
include 'nav-top.php';
?>
    <style>
        #box
        {
            width:600px;
            background:gray;
            color:white;
            margin:0 auto;
            padding:10px;
            text-align:center;
        }
    </style>
    <div class="container">
        <br />
        <h2 align="center">Редактировать новость</h2><br />
        <?php
        if(mysqli_num_rows($result) > 0)
        {
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" style="background-color: #5bc0de">
                    <tr>
                        <th>Фото</th>
                        <th>Тема</th>
                        <th>Текст</th>
                        <th>Дата</th>
                        <th>Описание</th>
                        <th>Редактировать</th>
                        <th>Удаление</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <tr id="<?php echo $row["id"]; ?>">
                            <td><img src="<?php echo $row["image"]; ?>" width="200" alt="logo"></td>
                            <td><?php echo $row["tittle"]; ?></td>
                            <td><?php echo $row["text"]; ?></td>
                            <td><?php echo $row["data_news"]; ?></td>
                            <td><?php echo $row["description"]; ?></td>
                            <td><a href="editNews.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Редактировать новость</a></td>
                            <td><input type="checkbox" name="id[]" class="delete_user" value="<?php echo $row["id"]; ?>" /></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <?php
        }
        ?>
        <div align="center">
            <button type="button" name="btn_delete" id="btn_delete" class="btn btn-success">Delete</button>
        </div>

    <script>
        $(document).ready(function(){

            $('#btn_delete').click(function(){

                if(confirm("Are you sure you want to delete this?"))
                {
                    var id = [];

                    $(':checkbox:checked').each(function(i){
                        id[i] = $(this).val();
                    });

                    if(id.length === 0) //tell you if the array is empty
                    {
                        alert("Please Select atleast one checkbox");
                    }
                    else
                    {
                        $.ajax({
                            url:'delete.php',
                            method:'POST',
                            data:{id:id},
                            success:function()
                            {
                                for(var i=0; i<id.length; i++)
                                {
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                                    $('tr#'+id[i]+'').fadeOut('slow');
                                }
                            }

                        });
                    }

                }
                else
                {
                    return false;
                }
            });

        });
    </script>
<?php
include 'html-footer.php';
?>