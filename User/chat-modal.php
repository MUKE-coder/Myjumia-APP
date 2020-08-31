
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <!---Modal form--->
          <h2 class="text-center">Contac Form</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
                            <!--Form with header-->

                            <form action="mail.php" method="post">
                                <div class="card border-primary rounded-0">
                                    <div class="card-header p-0">
                                        <div class="bg-info text-white text-center py-2">
                                            <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                            <p class="m-0">Con gusto te ayudaremos</p>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">

                                        <!--Body-->
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!--Form with header-->


                        </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

