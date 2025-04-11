@extends('layouts.app')

@section('title', 'Комнаты')

@section('content')

			<div class="container">
			<div class="col-md-8 sing">
				<div class=" single-grid">
					<img class="img-responsive" src="public/images/comfort.jpg" alt=""  class="img-responsive">
					<div class="lone-line">
						<h2>Номер класса "Комфорт"</h2>
						<div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i>11.04.2025</span></li>
							</ul>
						</div>
						<p>Этот уютный номер идеально подходит для тех, кто ищет простоту и удобство. 
                           В нем расположена небольшая двуспальная кровать с мягким матрасом, обеспечивающая комфортный отдых. 
                           Стол с удобным стулом позволяет легко организовать рабочее место или насладиться приемом пищи. 
                           Номер выполнен в теплых тонах, создавая атмосферу спокойствия и уюта. Это отличное решение для краткосрочного или 
                           длительного пребывания, где каждое ваше утро будет начинаться с комфортом.
                        </p>

					</div>
				</div>
					<div class="clearfix"> </div>
					<div class="clearfix"></div>
                <a href="{{ route('rooms') }}" class="btn btn-warning" style="color: white; font-weight: bold;">Посмотреть все комнаты</a>
            </div>
				</div>
                @endsection