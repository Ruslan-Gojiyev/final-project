@extends('layouts.app')

@section('title', 'Комнаты')

@section('content')

			<div class="container">
			<div class="col-md-8 sing">
				<div class=" single-grid">
					<img class="img-responsive" src="public/images/econom.jpg" alt=""  class="img-responsive">
					<div class="lone-line">
						<h2>Номер класса эконом</h2>
						<div class="cal">
							<ul>
								<li><span ><i class="glyphicon glyphicon-calendar"> </i>11.04.2025</span></li>
							</ul>
						</div>
						<p>Эконом номер с одной односпальной кроватью — идеальный выбор для путешественников, ценящих комфорт и практичность по доступной цене.
						   Уютный и светлый, номер обставлен со вкусом и рассчитан на одного гостя. В центре комнаты — удобная односпальная кровать с ортопедическим матрасом,
						   мягким постельным бельём и свежими полотенцами.</p>
						<p>У окна размещён функциональный рабочий стол со стулом, который подойдёт как для работы с ноутбуком, так и для спокойного отдыха с книгой. 
						   В номере предусмотрено всё необходимое: прикроватная тумба, вешалка для одежды, зеркало, розетки у кровати, а также бесплатный Wi-Fi и центральное отопление.
						   Интерьер выполнен в спокойных, нейтральных тонах, создающих атмосферу уюта и умиротворения. Благодаря продуманной планировке даже небольшой по площади номер 
						   остаётся просторным и не загромождённым.</p>

					</div>
				</div>
					<div class="clearfix"> </div>
					<div class="clearfix"></div>
                <a href="{{ route('rooms') }}" class="btn btn-warning" style="color: white; font-weight: bold;">Посмотреть все комнаты</a>
            </div>
				</div>
                @endsection