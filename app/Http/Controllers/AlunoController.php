<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    private $aluno;
    public function __construct(){
        $this->aluno = new Aluno(); //criando nova instância de Aluno
    }
    public function index(){
        //retorna uma resposta http em formato json 
       // return response()->json($this->produto->all()); //método do Eloquent

        //Retornando resultados para uma blade
         return view('alunos', ['aluninhos'=>$this->aluno->all()]);
        //alunos: blade 
        //aluninhos: chave do array associativo que deve ser chamado no blade
        //aluno: model  
       //$alunos =  Aluno::all();//retorna objeto
       //dump(sizeof($produtos)); //sizeof funciona para objeto
       //return $alunos;
    }

    public function show($id){
        // $alunos = Aluno::find($id);
        // return $alunos;
        return view('aluno', ['aluno' => Aluno::find($id)]);
    }

    public function create(){
        return view('aluno_create');
    }

    public function store(Request $request){
        //\Log::info('entrou na funcao de criacao');
        $aluninho = new Aluno();
        $array_input_request = $request->all();
        $aluninho->fill($array_input_request);
        $aluninho->save();
        
        if($aluninho->save()){
            dump('novo aluno criado');
        }else{
            dump('não foi possível salvar');
        }
    }

    public function edit($id){
        return view('aluno_edit', ['aluno' => Aluno::find($id)]);
    }

    public function update(Request $request, $id){
        $aluno = $request->all(); //por que all()
        if(Aluno::find($id)->update($aluno)){
            dump("Dados atualizados com sucesso");
            return redirect('/alunos');
        }else{
            dump("Erro, não foi possível atualizar");
        }
    }
}
