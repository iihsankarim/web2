<?php
function kelulusan($nilai_total) {
	if ($nilai_total >= 55) {
		return 'LULUS';
	} else {
		return 'TIDAK LULUS';
	}
}