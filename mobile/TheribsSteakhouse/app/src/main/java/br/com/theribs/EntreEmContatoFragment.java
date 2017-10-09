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
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.Button;
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
    List<String> lstClassificacao = new ArrayList<>();
    String url, parametros;

    public EntreEmContatoFragment(){
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View rootView;
        rootView = inflater.inflate(R.layout.fragment_entre_em_contato, container, false);
        findViews(rootView);
        getAplication();
        preferences = PreferenceManager.getDefaultSharedPreferences(getContext());

        lstClassificacao.add("Sugestão"); //TODO: Vim do banco
        lstClassificacao.add("Elogio");
        lstClassificacao.add("Crítica");
        lstClassificacao.add("Outro");

        ArrayAdapter<String> adapterClassificacao = new ArrayAdapter<String>(
                getContext(),
                android.R.layout.simple_spinner_item,
                lstClassificacao);

        adapterClassificacao.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);

        spn_classificacao.setAdapter(adapterClassificacao);

        return rootView;
    }

    private void findViews(View rootView) {
        spn_classificacao = (Spinner) rootView.findViewById(R.id.spn_classificacao);
        btn_enviarComentario = (Button) rootView.findViewById(R.id.btn_enviarComentario);
    }

    public void getAplication() {

        btn_enviarComentario.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                String url = getContext()+"localhost:8888/enviar";

                parametros = "teste=teste";

                new EntreEmContatoFragment.SolicitaDados().execute(url);

            }
        });
    }

    private class SolicitaDados extends AsyncTask<String, Void, String> {


        @Override
        protected String doInBackground(String... url) {
            return Conexao.postDados(url[0], parametros);
        }

        @Override
        protected void onPostExecute(String s) {

            Toast.makeText(getContext(), "Passou mininu", Toast.LENGTH_LONG).show();

        }
    }
}
