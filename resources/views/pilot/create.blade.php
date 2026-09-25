<form action="/pilot" method="POST">
@csrf
Nome: <input type="text" name="name">
Idade: <input type="number" name="age">
Carro: <input type="text" name="car">
Equipe: <input type="text" name="team">
Gênero: <input type="text" name="gender">
<button>Criar</button>


</form>