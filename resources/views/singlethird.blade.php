@extends('layouts.app')

@section('title', 'Комнаты')

@section('content')

			<div class="container">
			<div class="col-md-8 sing">
				<div class=" single-grid">
					<img class="img-responsive" src="public/images/lux.jpg" alt=""  class="img-responsive">
					<div class="lone-line">
						<h2>Номер класса "Люкс"</h2>
						<div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i>11.04.2025</span></li>
							</ul>
						</div>
						<p>Этот роскошный номер создан для тех, кто ценит высокий комфорт и изысканный стиль. В нем находится просторная двухспальная кровать с мягкими коричневыми простынями, 
                            создающими атмосферу уюта и покоя. Стол с удобным стулом идеально подходит для работы или ужина, а диван добавляет дополнительный комфорт, создавая идеальное место для отдыха. 
                            Номер оборудован современными удобствами, включая кондиционер и мини-бар, 
                            чтобы ваше пребывание было максимально комфортным. Этот номер — воплощение уюта, элегантности и современного дизайна.</p>
					</div>
				</div>
					<div class="clearfix"> </div>
					<div class="clearfix"></div>
                <a href="{{ route('rooms') }}" class="btn btn-warning" style="color: white; font-weight: bold;">Посмотреть все комнаты</a>
            </div>
				</div>
                @endsection