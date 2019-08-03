<?php $__env->startSection('login'); ?>
<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4" style="background:#4b4b4d;">
          <form class="form-horizontal was-validated" method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo e(csrf_field()); ?>

              <div class="card-body text-center">
              <h1>Ingresar al sistema</h1>
              <p class="text-muted">Control de acceso</p>
              <div class="form-group mb-3<?php echo e($errors->has('usuario' ? 'is-invalid' : '')); ?>">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" value="<?php echo e(old('usuario')); ?>" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                <?php echo $errors->first('usuario','<span class="invalid-feedback">:message</span>'); ?>

              </div>
              <div class="form-group mb-4<?php echo e($errors->has('password' ? 'is-invalid' : '')); ?>">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                <?php echo $errors->first('password','<span class="invalid-feedback">:message</span>'); ?>

              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary form-control ">Ingresar</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          <div class="card text-white py-5 d-md-down-none" style="width:44%;background:#4b4b4d;" >
            <div class="card-body text-center">
              <div>
                <h3>Sistema de Ventas y carrito de compras</h3>
                <p>bienvenido al sistema de ventas.</p>
                <a href="https://www.facebook.com/" target="_blank" class="btn btn-primary   mt-3" >facebook!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.contenido', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>