<form class="form-horizontal" method="post" action="<?=$this->createUrl('login/auth');?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

<div>
  <?=@$email;?>
  <?=@$password;?>
</div>

<?php
  echo Form::open($this->createUrl('login/index'),'POST');
  echo Form::label('nama','Nama',array('class'=>'control-label'));
  echo Form::text('nama', null, array('class'=>'form-control', 'placeholder'=>'Nama'));
  echo Form::label('nama','Password',array('class'=>'control-label'));
  echo Form::password('password',array('class'=>'form-control', 'placeholder'=>'Password'));
  echo Form::label('alamat','Alamat',array('class'=>'control-label'));
  echo Form::textarea('alamat',null, array('class'=>'form-control'));
  echo Form::label('gender','Gender',array('class'=>'control-label'));
  echo Form::select('gender', array('L'=>'Laki-laki','P'=>'Perempuan'), array('class'=>'form-control'));
  echo Form::submit('simpan','Simpan',array('class'=>'btn btn-success'));
  echo Form::close();
?>