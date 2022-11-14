## GitLab Runner 2049 - Solution


`.gitlab-ci.yml` файлыг шинжиж үзвэл **$FLAG** variable-д *flag*-г хадгалсан ба **pipeline**-н *"upload stage"* дуусахад серверлүү хуулан, буцаан GitLab Runner орчинд авчирч *"test stage"* хэсэгт **Container Registry**-лүү push-лэх үйлдлүүдийг хийсэн байна.

Ингэснээр $FLAG variable нь Runner-с Server, Server-с Runner луу дамжиж, эцэст нь `Dockerfile` нь flag.txt-г `/` директорт хуулсан container image үүсгэнэ. Эндээс:

```
docker run -it registry.gitlab.com/ccsclub/sict-ctf/gitlab-runner-2049:latest cat /flag.txt
```

##### Flag: sictCTF{y0u_c4n_f1x_th4t_8kuHES23q2KPPBGoODSr}
