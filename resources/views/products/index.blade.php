<?php
<div class="text-center" style = "float: left">
                        <div class="card">
                            <div class="card-body" >
                                <img  src="{{$enviados->rutaImg}}"  class="img-fluid" id="img" alt="Responsive image">
                                <h5 class="card-title">{{$enviados->name_product}}</h5>
<p class="card-text">{{$enviados->description_product}}</p>
<p class="card-text">Q.{{$enviados->precio_venta}}</p>
<a href="#" class="btn btn-primary">Agregar al carrito</a>
</div>
</div>
</div>
