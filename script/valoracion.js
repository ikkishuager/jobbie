function GivePoints(Point, Rank) {
    if (Rank == '1') {
        for (var i = Point; i > 0; i--) {
            $("#Point" + i).attr("class", "glyphicon glyphicon-star");
        }
    }
    else if (Rank == '2') {
        for (var i = Point; i > 0; i--) {
            $("#Point" + i).attr("class", "glyphicon glyphicon-star-empty");
        }
    }
    else {
        for (var i = 5; i > 0; i--) {
            $("#Point" + i).attr("onmouseover", "").attr("onmouseout", "");
        }
        for (var i = Point; i > 0; i--) {
            $("#Point" + i).attr("class", "glyphicon glyphicon-star");
        }
        for (var i = Point + 1; i < 6; i++) {
            $("#Point" + i).attr("class", "glyphicon glyphicon-star-empty");
        }
    }
}