<script>
function get()
{
 for (var loop=1; loop<=5; loop++)

                    {

                        if(document.getElementById('f'+loop).checked==true)

                        {

                            for (var loop1=1; loop1<=5; loop1++)

                            {

                                if(document.getElementById('f'+loop).id==document.getElementById('f'+loop1).id)

                                {

                                        document.getElementById('f'+loop1).checked = true;

                                }

                                else

                                {

                                        document.getElementById('f'+loop1).checked = false;

                                }

                            }

                        }

                    }



}

</script>
<input name="f[]" type="checkbox" id="f1" value="1" onClick="get()"/>
<input name="f[]" type="checkbox" id="f2" value="2" onClick="get()"/>
<input name="f[]" type="checkbox" id="f3" value="3" onClick="get()"/>
<input name="f[]" type="checkbox" id="f4" value="4" onClick="get()"/>
<input name="f[]" type="checkbox" id="f5" value="5" onClick="get()"/>