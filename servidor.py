import http.server
import socketserver
import re
import os

PORT = 8000

class PHPSimulatorHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        # Se a pessoa tentar acessar a raiz ou o index.php
        if self.path == '/' or self.path == '/index.php':
            self.send_response(200)
            self.send_header('Content-type', 'text/html; charset=utf-8')
            self.end_headers()
            
            # Carrega o index.php
            try:
                with open('index.php', 'r', encoding='utf-8') as f:
                    content = f.read()
            except Exception as e:
                self.wfile.write(f"Erro ao ler index.php: {e}".encode('utf-8'))
                return
                
            # Função para buscar e substituir os 'includes' do PHP
            def replacer(match):
                file_path = match.group(1)
                if os.path.exists(file_path):
                    with open(file_path, 'r', encoding='utf-8') as sf:
                        return sf.read()
                return f"<!-- Erro: Não encontrei {file_path} -->"
                
            # Procura por: <?php include 'sections/nome.php'; ? >
            content = re.sub(r"<\?php\s+include\s+['\"]([^'\"]+)['\"];\s*\?>", replacer, content)
            
            self.wfile.write(content.encode('utf-8'))
        else:
            # Para CSS, JS, Imagens, serve normalmente
            super().do_GET()

print(f"==================================================")
print(f"🌟 SERVIDOR LOCAL DO SEU TEMA INICIADO COM SUCESSO 🌟")
print(f" Abra no seu navegador: http://localhost:{PORT}")
print(f"==================================================")
print("Pressione Ctrl+C duas vezes para parar o servidor.")

with socketserver.TCPServer(("", PORT), PHPSimulatorHandler) as httpd:
    try:
        httpd.serve_forever()
    except KeyboardInterrupt:
        pass
