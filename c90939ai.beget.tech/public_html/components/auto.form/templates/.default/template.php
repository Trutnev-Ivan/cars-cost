<?php
/**
 * @global $result
 */
$asset = Asset::getInstance();
$asset->addCss($templateFolder . "/css/style.css");
$asset->addJs($templateFolder . "/js/slider.js");
?>

<div class="slider-container">
	<div class="slider-left"></div>
	<div class="slider">

		<div class="inner-slider">
			<?php foreach ($result["CAR_MARKS"] as $mark): ?>
				<div class="slider-item">
					<img class="d-flex align-self-center" src="<?= $mark["IMG"] ?>" alt="<?= $mark["NAME"] ?>"
						 title="<?= $mark["NAME"] ?>">
				</div>
			<?php endforeach; ?>
		</div>

	</div>
	<div class="slider-right"></div>
	<div class="slider-pagination text-center"></div>
</div>


<div class="row">
	<div class="col-10 mx-auto mt-5 text-center">
		<?php if ($result["CAR_MODELS"]): ?>
			<div class="input-group">
				<span class="input-group-text">Модель: </span>
				<select role="button" class="form-select" id="select-car-model">
					<?php foreach ($result["CAR_MODELS"] as $carModel): ?>
						<option value="<?= $carModel["NAME"] ?>">
							<?= $carModel["NAME"] ?>
						</option>
					<? endforeach; ?>
				</select>
			</div>
		<?php endif; ?>
	</div>
</div>

<div class="row">
	<div class="col-10 row mx-auto">
		<div class="col-6 mt-5 mx-auto">
			<?php if ($result["CAR_BOXES"]): ?>
				<div class="input-group">
					<span class="input-group-text">Коробка передач: </span>
					<select role="button" class="form-select" id="select-car-box">
						<?php foreach ($result["CAR_BOXES"] as $carBox): ?>
							<option value="<?= $carBox["NAME"] ?>">
								<?= $carBox["NAME"] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

			<?php if ($result["CAR_TYPES"]): ?>
				<div class="input-group">
					<span class="input-group-text">Тип: </span>
					<select role="button" class="form-select" id="select-car-type">
						<?php foreach ($result["CAR_TYPES"] as $carType): ?>
							<option value="<?= $carType["NAME"] ?>">
								<?= $carType["NAME"] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

			<div class="input-group">
				<span class="input-group-text">Пробег (км): </span>
				<input id="mileage" type="text" class="form-control" placeholder="mileage">
			</div>

			<?php if ($result["CAR_CLASSES"]): ?>
				<div class="input-group">
					<span class="input-group-text">Класс машины: </span>
					<select role="button" class="form-select" id="select-car-type">
						<?php foreach ($result["CAR_CLASSES"] as $carClass): ?>
							<option value="<?= $carClass["NAME"] ?>">
								<?= $carClass["NAME"] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

		</div>

		<div class="col-6 mt-5">
			<?php if ($result["DRIVE_UNITS"]): ?>
				<div class="input-group">
					<span class="input-group-text">Привод: </span>
					<select role="button" class="form-select" id="select-drive-unit">
						<?php foreach ($result["DRIVE_UNITS"] as $driveUnit): ?>
							<option value="<?= $driveUnit["NAME"] ?>">
								<?= $driveUnit["NAME"] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

			<?php if ($result["COUNTRIES"]): ?>
				<div class="input-group">
					<span class="input-group-text">Страна: </span>
					<select role="button" class="form-select" id="select-country">
						<?php foreach ($result["COUNTRIES"] as $country): ?>
							<option value="<?= $country["NAME"] ?>">
								<?= $country["NAME"] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
			<?php endif; ?>

			<div class="input-group">
				<span class="input-group-text">Год: </span>
				<input id="year" role="button" type="date" class="form-control" placeholder="mileage">
			</div>

			<div class="input-group">
				<span class="input-group-text">Мощность: </span>
				<div for="power" class="range-tooltip">
					<p class="m-0">0</p>
					<span class="triangle"></span>
				</div>
				<input id="power" role="button" type="range" class="w-75 mx-auto" min="0" max="1000" value="0">
			</div>

		</div>
	</div>

</div>

<div class="row">
	<div class="col-10 mt-5 mb-5 mx-auto text-center">
		<?php if ($result["CAR_COLORS"]): ?>
			<span>Цвет: </span>
			<?php foreach ($result["CAR_COLORS"] as $carColor): ?>
				<span role="button" class="border rounded-circle p-3 me-2" title="<?= $carColor["NAME"] ?>"
					  style="background-color: <?= $carColor["HEX"] ?>"></span>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>

<script>


	$(document).ready(function () {
		let x = 0;

		window.Slider.init({
			countItems: 5,
			padding: 20
		});

		$(".right").on("click", function (e) {
			x -= 140 * 7 + 25;
			$(".carousel ul").css("transform", "translateX(" + x + "px)");
		});

		$(".left").on("click", function (e) {
			x += 140 * 7 - 25;
			$(".carousel ul").css("transform", "translateX(" + x + "px)");
		});

		$("[type='range']").on("mouseleave", function () {
			let label = $("[for='" + $(this)[0].id + "']");
			label.css("display", "none");
		});

		$("[type='range']").on("mouseenter", function () {
			let label = $("[for='" + $(this)[0].id + "']");
			label.css("display", "flex");
		});

		$("[type='range']").each(function (range) {
			let label = $("[for='" + $(this)[0].id + "']");
			let left = $(this).position().left;
			let top = $(this).position().top;
			let off = ($(this).width() - label.width() / 2) / ($(this)[0].max - $(this)[0].min);
			label.css("left", $(this).val() * off + left);
			label.css("top", top - label.height() + "px");
			label.find("p").html($(this).val());
		});

		$("[type='range']").on("input", function () {
			let label = $("[for='" + $(this)[0].id + "']");
			let left = $(this).position().left;
			let top = $(this).position().top;
			let off = ($(this).width() - label.width() / 2) / ($(this)[0].max - $(this)[0].min);
			label.css("left", $(this).val() * off + left);
			label.css("top", top - label.height() + "px");
			label.find("p").html($(this).val());
		});

	});

</script>

