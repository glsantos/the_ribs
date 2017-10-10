package br.com.theribs;

import android.content.SharedPreferences;
import android.os.AsyncTask;
import android.preference.PreferenceManager;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

/**
 * A placeholder fragment containing a simple view.
 **/
public class EntreEmContatoFragment extends Fragment {

    Spinner spn_classificacao;
    SharedPreferences preferences;
    Button btn_enviarComentario;
    EditText nome_cliente_contato, telefone_cliente_contato, email_cliente_contato, txt_comentario_contato;

    List<ClassificacaoContato> lstClassificacao = new ArrayList<>();
    ArrayAdapter<ClassificacaoContato> adapterClassificacao;

    String url, parametros, retorno, link;
    int id_classificacao;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView;
        rootView = inflater.inflate(R.layout.fragment_entre_em_contato, container, false);
        findViews(rootView);

        preferences = PreferenceManager.getDefaultSharedPreferences(getContext());

        ClassificacaoContato classificacaoContato1 = new ClassificacaoContato();
        ClassificacaoContato classificacaoContato2 = new ClassificacaoContato();
        ClassificacaoContato classificacaoContato3 = new ClassificacaoContato();
        ClassificacaoContato classificacaoContato4 = new ClassificacaoContato();

        //TODO: Vim do banco
        classificacaoContato1.setId_classificacao(1);
        classificacaoContato1.setNomeClassificacao("Sugestão");
        lstClassificacao.add(classificacaoContato1);

        classificacaoContato2.setId_classificacao(2);
        classificacaoContato2.setNomeClassificacao("Elogio");
        lstClassificacao.add(classificacaoContato2);

        classificacaoContato3.setId_classificacao(3);
        classificacaoContato3.setNomeClassificacao("Crítica");
        lstClassificacao.add(classificacaoContato3);

        classificacaoContato4.setId_classificacao(4);
        classificacaoContato4.setNomeClassificacao("Outro");
        lstClassificacao.add(classificacaoContato4);

        final ArrayAdapter<ClassificacaoContato> adapterClassificacao = new ArrayAdapter<ClassificacaoContato>(
                getContext(),
                android.R.layout.simple_spinner_item,
                lstClassificacao);

        adapterClassificacao.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

        spn_classificacao.setAdapter(adapterClassificacao);

        spn_classificacao.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                id_classificacao = adapterClassificacao.getItem(position).getId_classificacao();
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

        getAplication();

        return rootView;
    }

    private void findViews(View rootView) {

        spn_classificacao = (Spinner) rootView.findViewById(R.id.spn_classificacao);
        btn_enviarComentario = (Button) rootView.findViewById(R.id.btn_enviarComentario);
        nome_cliente_contato = (EditText) rootView.findViewById(R.id.nome_cliente_contato);
        telefone_cliente_contato = (EditText) rootView.findViewById(R.id.telefone_cliente_contato);
        email_cliente_contato = (EditText) rootView.findViewById(R.id.email_cliente_contato);
        txt_comentario_contato = (EditText) rootView.findViewById(R.id.txt_comentario_contato);
    }

    public void getAplication() {

        btn_enviarComentario.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                String nome ,telefone, email, comentario;

                nome = nome_cliente_contato.getText().toString();
                telefone = telefone_cliente_contato.getText().toString();
                email = email_cliente_contato.getText().toString();
                comentario = txt_comentario_contato.getText().toString();

                link = "http://10.0.0.2/enviar?nome="+nome+"&telefone="+telefone+"&email="+email+"&classificacao="+id_classificacao+"&comentario="+comentario;
                //TODO: SPLIT PRA RESOLVER O PROBLEMA!!! - GIOVANNA
                if(link.contains(" ")){
                    Log.d("if","Espaço");
                }else{
                    Log.d("if","Sem espaço");
                }

                new EntreEmContatoFragment.SolicitaDados().execute();
                Log.d("aqui", link);
            }
        });
    }

    private class SolicitaDados extends AsyncTask<Void, Void, Void> {


        @Override
        protected Void doInBackground(Void... params) {
            retorno = HttpConnection.get(link);
            return null;
        }

        @Override
        protected void onPostExecute(Void aVoid) {
            super.onPostExecute(aVoid);
            Toast.makeText(getContext(), retorno, Toast.LENGTH_LONG).show();
        }
    }
}
