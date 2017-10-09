package br.com.theribs;

import android.app.ProgressDialog;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.preference.PreferenceManager;
import android.support.design.widget.Snackbar;
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
    List<String> lstClassificacao = new ArrayList<>();
    String url, parametros, retorno;
    String id_classificacao;
    ArrayAdapter<String> adapterClassificacao;
    String link;
    String classificacaoContato;

    public EntreEmContatoFragment(){
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView;
        rootView = inflater.inflate(R.layout.fragment_entre_em_contato, container, false);
        findViews(rootView);

        preferences = PreferenceManager.getDefaultSharedPreferences(getContext());

        lstClassificacao.add("Sugestão"); //TODO: Vim do banco
        lstClassificacao.add("Elogio");
        lstClassificacao.add("Crítica");
        lstClassificacao.add("Outro");

        final ArrayAdapter<String> adapterClassificacao = new ArrayAdapter<String>(
                getContext(),
                android.R.layout.simple_spinner_item,
                lstClassificacao);

        adapterClassificacao.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

        spn_classificacao.setAdapter(adapterClassificacao);

        spn_classificacao.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                classificacaoContato = adapterClassificacao.getItem(position);
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

                link = "http://10.0.2.2/enviar?nome="+nome+"&telefone="+telefone+"&email="+email+"&classificacao="+classificacaoContato+"&comentario="+comentario;

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
