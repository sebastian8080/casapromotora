@extends('layouts.plantilla')

@section('content-head')

@endsection

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-1">
                @for ($i = 0; $i < 2; $i++)
                    <img class="img-fluid" src="https://dolmen.com.ec/wp-content/uploads/2021/05/bloque_rayado.png" alt="">
                @endfor
            </div>
            <div class="col-sm-3">
                <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://dolmen.com.ec/wp-content/uploads/2021/05/bloque_rayado.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://dolmen.com.ec/wp-content/uploads/2021/05/bloque_rayado.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://dolmen.com.ec/wp-content/uploads/2021/05/bloque_rayado.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-sm-4">
                <h2>Titulo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui nobis tempore minima odio, doloremque cumque rerum placeat repellat recusandae nesciunt tenetur aut velit, cum ut iure magnam labore blanditiis ullam.</p>
                <p>Precio</p>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="input-group">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                <span>
                                    <i class="fas fa-minus"></i>
                                </span>
                            </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="1000">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                <span>
                                    <i class="fas fa-plus"></i>
                                </span>
                            </button>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <button class="btn btn-outline-danger btn-sm"><span><i class="fas fa-cart-plus"></i></span> Añadir al carrito</button>
                    <button class="btn btn-outline-dark btn-sm"><span><i class="fas fa-heart"></i></span></button>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row text-center pt-5 d-flex justify-content-center">
            <h3>PRODUCTOS RELACIONADOS</h3>
            <hr style="color:red; width:10%;">
            
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/partners.js') }}"></script>
    <script>  
        $('.btn-number').click(function(e){
            e.preventDefault();
            
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
                    
                    if(currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    } 
                    if(parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {
            
            minValue =  parseInt($(this).attr('min'));
            maxValue =  parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            
            name = $(this).attr('name');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            
            
        });
        $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) || 
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                        // let it happen, don't do anything
                        return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
    </script>
@endsection