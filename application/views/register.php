<div class="container mt-5">
  <div class="col-md-7" style="float:none; margin:0 auto;">
    <?php echo validation_errors(); ?>  
    <form action="/index.php/auth/register" method="post">
      <h2 class="ml-5">회원가입</h2>
      <div class="row mt-5 mb-3 ml-5">
        <label for="inputEmail" class="col-sm-2 col-form-label">이메일</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="이메일">
        </div>
      </div>
      <div class="row mb-3 ml-5">
        <label for="nickname" class="col-sm-2 col-form-label">닉네임</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo set_value('nickname'); ?>" placeholder="닉네임">
        </div>
      </div>
      <div class="row mb-3 ml-5">
        <label for="password" class="col-sm-2 col-form-label">비밀번호</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="비밀번호">
        </div>
      </div>
      <div class="row mb-3 ml-5">
        <label for="re_password" class="col-sm-2 col-form-label">비밀번호 확인</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="re_password" name="re_password" value="<?php echo set_value('re_password'); ?>" placeholder="비밀번호 확인">
        </div>
      </div>
      <div class="row mb-3 ml-5">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-8">
          <input type="submit" class="btn btn-primary" value="가입하기">
        </div>
      </div>
    </form>
  </div> 
</div>

