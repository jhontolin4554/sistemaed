<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte</title>
  <link rel="stylesheet" href="css/reporte.css">
</head>
<body>

  <h1>Reporte De TaLLa de pantalon {{$pantalones->first()->color }}</h1>

  <table>
    <thead>
        <tr>
            <th>4</th>
            <th>6</th>
            <th>8</th>
            <th>10</th>
            <th>12</th>
            <th>14</th>
            <th>16</th>
            <th>36</th>
            <th>38</th>
            <th>40</th>
            <th>42</th>
            <th>44</th>
            <th>46</th>
            <th>48</th>
            <th>50</th>
            <th>52</th>
            <th>54</th>
            <th>56</th>
            <th>58</th>
            <th>60</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($pantalones as $pantalon)
            <tr>
            <th>{{$pantalon->talla1}}</th>
            <th>{{$pantalon->talla2}}</th>
            <th>{{$pantalon->talla3}}</th>
            <th>{{$pantalon->talla4}}</th>
            <th>{{$pantalon->talla5}}</th>
            <th>{{$pantalon->talla7}}</th>
            <th>{{$pantalon->talla8}}</th>
            <th>{{$pantalon->talla9}}</th>
            <th>{{$pantalon->talla10}}</th>
            <th>{{$pantalon->talla11}}</th>
            <th>{{$pantalon->talla12}}</th>
            <th>{{$pantalon->talla13}}</th>
            <th>{{$pantalon->talla14}}</th>
            <th>{{$pantalon->talla15}}</th>
            <th>{{$pantalon->talla16}}</th>
            <th>{{$pantalon->talla17}}</th>
            <th>{{$pantalon->talla18}}</th>
            <th>{{$pantalon->talla19}}</th>
            <th>{{$pantalon->talla20}}</th>
            <th>{{$pantalon->talla21}}</th>
            </tr>
        @endforeach
    </tbody>
  </table>

</body>
</html>
