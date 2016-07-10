  function print(){
	var forPrint=[];
	for(var i=0;i<arguments.length;i++)
	{
			forPrint.push(String(arguments[i]));
	}
	forPrint.push("<br />");
	document.write(forPrint.join(" "));
  }
  