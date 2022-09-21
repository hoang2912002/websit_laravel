<form action="post" method="POST">
    <!-- <input type="hidden" name="_token" id="" value="<?php echo csrf_token()?>"> -->
    @csrf;
    Nhập gì đó đi
    <input type="text" name="a" id="">
    <button>Nhập</button>
</form>