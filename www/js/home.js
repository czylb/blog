<script type="text/javascript">
        var tab1=document.querySelector('#cir1');
        var tab2=document.querySelector('#cir2');
        var tab3=document.querySelector('#cir3');
        var tab4=document.querySelector('#cir4');
        var show=document.querySelector('.frame');
        tab1.addEventListener('click',function(){
            tab1.style.backgroundColor="#F0FCFA"
            tab2.style.backgroundColor="#8BB0A8"
            tab3.style.backgroundColor="#8BB0A8"
			tab4.style.backgroundColor="#8BB0A8"
            show.style.backgroundImage="url('picture/back.png')";
        })
        tab2.addEventListener('click',function(){
            tab2.style.backgroundColor="#F0FCFA"
            tab1.style.backgroundColor="#8BB0A8"
            tab3.style.backgroundColor="#8BB0A8"
            tab4.style.backgroundColor="#8BB0A8"
            show.style.backgroundImage="url('picture/mm.jpg')";
        })
        tab3.addEventListener('click',function(){
            tab3.style.backgroundColor="#F0FCFA"
            tab1.style.backgroundColor="#8BB0A8"
            tab2.style.backgroundColor="#8BB0A8"
            tab4.style.backgroundColor="#8BB0A8"
            show.style.backgroundImage="url('picture/mc.jpg')";
        })
        tab4.addEventListener('click',function(){
            tab4.style.backgroundColor="#F0FCFA"
            tab1.style.backgroundColor="#8BB0A8"
            tab2.style.backgroundColor="#8BB0A8"
            tab3.style.backgroundColor="#8BB0A8"
            show.style.backgroundImage="url('picture/bl.jpg')";
        })//控制frame背景图
    </script>